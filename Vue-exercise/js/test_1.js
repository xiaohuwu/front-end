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
    props: ['title', 'body'],
    data() {
        return {
            isShow: true
        }
    },
    methods: {
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

Vue.component('modal', {
    props: ['title', 'body'],
    template:
        `
    <div class="container ">
     <div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
         <slot></slot>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
</div>
    
</div>
  
  `
})


