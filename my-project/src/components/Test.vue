<template>
  <div>

    postTitle: {{postTitle}}
    <h3 v-on:click="childClick"> 变大 变色66</h3>
    <div :class="{test: isActive}" :style="{fontSize: fontSize+'px'}">
      <p>变大 变色</p>
      <button @click="myClick">点我</button>
    </div>
    <input type="text" v-model.lazy="score"/>
    <template v-if="score">
      <div v-if="score > 60">优秀</div>
      <div v-else> 不及格</div>
    </template>

    <div class="vertical-tab">
      <!-- 左侧tab栏 -->
      <ul class="nav nav-tabs1">
        <li v-for="(item,index) in list" v-if="index <= list.length/2" :class='activeNumber == index? "active" : "" '>
          <a href="#" @click="tabClick(index)"> {{item.title}} </a>
        </li>
      </ul>
      <!-- 内容区域 -->
      <div class="tab-content tabs">
        <div class="tab-pane  fade" v-for="(item,index) in list" :class='activeNumber == index? "active" : "" '>
          <h3>{{item.title}}</h3>
          <p>{{item.content}}</p>
        </div>
      </div>
      <ul class="nav nav-tabs2">
        <li v-for="(item,index) in list"  v-if="index > list.length/2" :class='activeNumber == index? "active" : "" '>
          <a href="#" @click="tabClick(index)"> {{item.title}} </a>
        </li>
      </ul>
    </div>



  </div>
</template>

<script>
  export default {
    name: 'Test',
    props: ['postTitle'],
    data () {
      return {
        data: 'hello',
        fontSize: 16,
        isActive: true,
        score: '',
        list: [{
          id: 1,
          title: 'Section 1',
          content: 'content1'
        }, {
          id: 2,
          title: 'Section 2',
          content: 'content2'
        }, {
          id: 3,
          title: 'Section 3',
          content: 'content3'
        }, {
          id: 4,
          title: 'Section 4',
          content: 'content4'
        }, {
          id: 5,
          title: 'Section 5',
          content: 'content5'
        }, {
          id: 6,
          title: 'Section 6',
          content: 'content6'
        }],
        activeNumber: 0,
      }
    },
    methods: {
      myClick: function () {
        this.fontSize += 2
        this.isActive = !this.isActive
      },
      tabClick: function (index) {
        this.activeNumber = index
      },
      childClick: function () {
        this.postTitle();
      }
    }
  }
</script>

<style scoped>
  .test {
    color: red;
  }

  * {
    margin: 0;
    padding: 0;
  }

  .vertical-tab {
    width: 920px;
    margin: 100px auto;
  }

  .vertical-tab .nav {
    list-style: none;
    width: 200px;
  }

  .vertical-tab .nav-tabs1 {
    border-right: 3px solid #e7e7e7;
  }

  .vertical-tab .nav-tabs2 {
    border-left: 3px solid #e7e7e7;
  }

  .vertical-tab .nav a {
    display: block;
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 10px 20px;
    margin: 0 0 1px 0;
    text-decoration: none;
  }

  .vertical-tab .tab-content {
    color: #555;
    background-color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 23px;
    padding: 10px 15px 10px 25px;
    display: table-cell;
    position: relative;
  }

  .vertical-tab .nav-tabs1 {
    float: left;
  }

  .vertical-tab .tabs {
    width: 500px;
    box-sizing: border-box;
    float: left;
  }

  .vertical-tab .tab-content h3 {
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 5px 0;
  }

  .vertical-tab .nav-tabs2 {
    float: right;
  }

  .tab-content .tab-pane {
    display: none;
  }

  .tab-content .tab-pane.active {
    display: block;
  }


</style>
