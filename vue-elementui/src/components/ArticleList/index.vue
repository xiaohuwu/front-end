<template>
  <el-row>
    <el-col :span="24" v-for="(o) in 2" :key="o" class="marginBottom10">
      <el-card class="item">
        <p class="title">文章标题</p>
        <p class="desc">文章描述</p>
        <p class="footer">
          2021-11-12 09:30
          <span class="viewer"> <i class="el-icon-view"></i>130 </span>
        </p>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: "ArticleList",
  props: {},
}

</script>



<style scoped>
.item {
  text-align: left;
}
.title {
  font-weight: bold;
}
.desc {
  color: #aaa;
}
.footer {
  font-size: 12px;
}
.viewer {
  margin-left: 15px;
}
.marginBottom10 {
  margin-bottom: 10px;
}
</style>



