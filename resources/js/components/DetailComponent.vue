<template>
    <div class="detail_content">
        <div class="detail_inner">
            <small>{{ fesDay }}</small>
            <h2>{{ fesTitle }}</h2>
            <ul>
                <li>
                    <span>場所</span>
                    <div class="detail_list">{{ fesPlace }}</div>
                </li>
                <li>
                    <span>好きになったバンド</span>
                    <div class="detail_list">{{ fesBand }}</div>
                </li>
                <li>
                    <span>コメント</span>
                    <div class="detail_list">{{ fesComment }}</div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            fes: []
        }
    },
    props:[
        'fesId',
        'fesDay',
        'fesTitle',
        'fesPlace',
        'fesBand',
        'fesComment'
    ]
}
</script>