
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://www.onethink.cn" target="_blank">Angobuy</a></strong> 强力驱动</p>
      </div>
    </footer>

<include file="Public/var"/>
<block name="script"></block> <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
{:hook('pageFooter', 'widget')}
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	<block name="hidden"></block>
</div>
</body>
</html>