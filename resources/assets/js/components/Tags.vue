<template>
        <ul>
            <li v-for="(todo, index) in todos">
            {{ todo }}
            <span @click="deleteItem(index)">[x]</span>
            <input type="hidden" name="tags[]" :value="todo">
            </li>
            <input type="text" v-model="newItem">
            <div id="create_tags" @click="addItem()">タグを生成する。</div>
        </ul>
</template>

<script>
export default {
    data() {
        return {
            newItem: '',
            todos: []
        }
    },
    
      methods: {
        addItem: function() {
          this.todos.push(this.newItem);
          this.newItem = '';
        },
        deleteItem: function(index){
            if (confirm('タグを削除しますか?')){
                this.todos.splice(index, 1)
            }
        }
      }
}
</script>
