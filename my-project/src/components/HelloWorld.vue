<template>
  <div :class="[myClass,background]">
    <input v-model="msg"/>
    <br/>
    <textarea v-model="msg" placeholder="add multiple lines"></textarea> <br/>
    你的爱好是: <br/>
    <input v-model="checkedNames" type="checkbox" value="羽毛球"/> 羽毛球
    <input v-model="checkedNames" type="checkbox" value="篮球球"/> 篮球球
    <input v-model="checkedNames" type="checkbox" value="乒乓球"/> 乒乓球<br/>
    {{msg}} <br/> {{msg.split('').reverse().join('') }}
    <a :href="url"> 我要跳转了 </a> <br>
    <a @click="myclick"> 我被点击了 </a> <br>

    <form action="/www.baidu.com" v-on:submit.prevent="mysubmit">
      <button type="submit"> 提交</button>
    </form>

    <h3>计算属性</h3>
    <p ref="hBox">{{name}}</p>
    <button @click="bigger">点击变大</button>
    <p>计算出我名字倒着写：{{reverseName}}</p>
    <p>{{now}}</p>
    <router-link to="/test">练习</router-link><br/>
    <router-link to="/list">练习 list</router-link><br/>
    <router-link to="/blog">练习blog</router-link><br/>
    <router-link to="/cart_list">练习购物车</router-link><br/>
    <router-link to="/do_list">练习TodoList</router-link><br/>
    <router-link to="/vuex">vuex示例</router-link><br/>
    <router-link to="/person_list">vuex人员列表</router-link><br/>
    <router-link to="/slot1">作用域插槽</router-link><br/>

    <input v-model="sex" type="radio" value="0"/> 男
    <input v-model="sex" type="radio" value="1"/> 女
    <br/>

    <input v-model="checked" type="checkbox" :true-value="yes" :false-value="no"/> 同意协议<br/>

    <select v-model="selected" multiple style="width: 50px;">
      <option disabled value="">请选择</option>
      <option>A</option>
      <option value="66">B</option>
      <option>C</option>
    </select>
    <span>Selected: {{ selected }}</span>
    <h5> v-bind style 内联样式</h5>
    <p :style="{fontSize: '16px',backgroundColor:'red'}"> v-bind style</p>
    <Test :postTitle = "postTitle"></Test>
  </div>

</template>

<script>
  import Test from "./Test"
  export default {
    name: 'HelloWorld',
    data () {
      return {
        msg: 'hello',
        checkedNames: [],
        url: 'http://www.baidu.com',
        name: '',
        sex: '',
        checked: '',
        radio_checked: false,
        selected: [],
        yes: '好',
        no: '不好',
        isActive: true,
        myClass: {active: true, difClass: true},
        background: 'background',
        styleObject: {
          color: 'red',
          fontSize: '13px'
        }
      }
    },
    computed: {
      reverseName: function () {
        return this.name.split('').reverse().join('')
      },
      now: function () {
        return Date.now()
      }
    },
    methods: {
      myclick: function () {
        this.checkedNames = []
      },
      mysubmit: function () {
        console.log('mysubmit')
      },
      postTitle:function () {
        console.log('postTitle')
      },
      bigger: function(){
        this.name= "小虎哥"
        this.$nextTick(()=>{
          console.log("height:", this.$refs.hBox.offsetHeight);
        });
      }
    },
    components:{
      Test
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  h1, h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }

  .active {
    border: solid 1px red;
  }

  .background {
    /*background: #42b983;*/
  }
</style>
