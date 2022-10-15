Vue.component("task-list", {
    template: `<div><task v-for="item in tasks">{{item}}</task></div>`,
    data() {
        return {
            tasks: ["java", "ruby", "python"]
        }
    }
});


Vue.component('task', {
    template: '<li><slot></slot></li>'
})


Vue.component('message', {
    props: ['title','body'],
    data(){
        return {
            isShow: true
        }
    },
    methods:{
        close: function () {
            this.isShow = false
        }
    },
    template: `
   <div class="container" v-show="isShow">
   <div class="panel panel-default">
    <div class="panel-heading">
        {{title}} <button @click="close">X</button>
    </div>
    <div class="panel-body">
        {{body}}
    </div>
     </div>
   </div>
    `
})


