<block name="header"></block>
<div id="main-container" class="container">
    <div class="row">
        <block name="side">
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                <block name="publish"></block>
                
            </div>
        </block>
        <block name="body"></block>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>