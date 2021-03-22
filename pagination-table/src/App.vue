<template>
<div id ="app">
<Table v-if="data" :data="tableData"/>
</div>
</template>
<script>

import Table from './components/Table'

export default {
components:{
    Table
},
data: () => ({
    tableData: undefined
}),
mounted() {
    this.$axios.get('https://documenter.getpostman.com/view/14126698/Tz5wWESG')
    .then(({data}) => {
     this.tableData = data
    })
}
}
</script>

<style>
</style>
