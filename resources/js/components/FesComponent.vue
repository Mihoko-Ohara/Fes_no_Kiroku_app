<template>
    <div class="content">
        <h1 class="fes_no_kiroku fes_wf-nicomoji">フェスのきろく</h1>
        <div class="fes_record">
            <div class="fes_record_box">
                <div>
                    <p>フェスのなまえ</p>
                    <input type="text" v-model="new_title" class="input_title">
                </div>
                <div>
                    <p>日付</p>
                    <input type="date" v-model="new_day" class="input_day">
                </div>
            </div>
            <div class="fes_record_box">
                <div>
                    <p>好きになったバンド</p>
                    <input type="text" v-model="new_band" class="input_band">
                </div>
                <div>
                    <p>場所</p>
                    <input type="text" v-model="new_place" class="input_place">
                </div>
            </div>
            <div class="fes_record_box">
                <div>
                    <p>コメント</p>
                    <textarea v-model="new_comment" class="input_comment"></textarea>
                </div>
                <div>
                    <button type="button" v-on:click="addFes" class="add_btn">記録する</button>
                </div>
            </div>
        </div>
        <div class="fes_search">
            <p>キーワードで検索</p>
            <input type="text" v-model="keyword" placeholder="フェスのなまえ、日付を入力">
        </div>
        <div class="fes_card">
            <div class="fes_card_inner">
                <div v-for="live in searchItems" v-bind:key="live.id" class="fes_card_list">
                        <a v-bind:href="`/${live.id}`">
                            <div class="box">
                                <small>{{ live.day }}</small>
                                <h2>{{ live.title }}</h2>
                                <small>at {{ live.place }}</small>
                            </div>
                        </a>
                        <button v-on:click="deleteFes(live.id)" class="delete_btn">
                            <img src="../../../public/img/trash_box.svg" alt="削除">
                        </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            fes: [],
            keyword: '',
            new_title: '',
            new_day: '',
            new_place: '',
            new_band: '',
            new_comment: ''
        }
    },
    computed: {
        searchItems: function(){
            var fes = [];
                for(var i in this.fes){
                    var live = this.fes[i]
                        //入力ない場合は全て表示
                        if(this.keyword == ''){
                            fes.push(live)
                        }
                        else{
                            if(live.title && live.title.indexOf(this.keyword) !== -1 ||
                                live.day && live.day.indexOf(this.keyword) !== -1 ){
                                fes.push(live)
                            }
                        }
                }
                return fes
        }
    },
    methods: {
        fetchfes: function(){ //←axios.get で fes リストを取得
            axios.get('/api/get').then(response =>{
                this.fes = response.data //← 取得した fes リストを fes に格納
            })
        },
        addFes: function(){
            axios.post('/api/add',{
                title: this.new_title,
                day: this.new_day,
                place: this.new_place,
                band: this.new_band,
                comment: this.new_comment
            }).then(response =>{
                this.fes = response.data
                this.new_title = ''
                this.new_day = ''
                this.new_place = ''
                this.new_band = ''
                this.new_comment = ''
            })
        },
        deleteFes: function(fes_id){ //← 追記
            axios.post('/api/del',{
            id: fes_id
            }).then(response =>{
                this.fes = response.data
            })
            }
        },
    created: function(){ //← インスタンス生成時に fetchfes()を実行したいので、created フックに登録
        this.fetchfes()
    }
}
</script>

<style>

</style>