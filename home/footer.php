<div class="waifu">
    
    <!-- 提示框 -->
    <div class="waifu-tips"></div>
    
    <!-- 看板娘画布 -->
    <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
    
    <!-- 工具栏 -->
    <div class="waifu-tool">
        <span class="fui-home"></span>
        <span class="fui-chat"></span>
        <span class="fui-eye"></span>
        <span class="fui-user"></span>
        <span class="fui-photo"></span>
        <span class="fui-info-circle"></span>
        <span class="fui-cross"></span>
    </div>
    
</div>
<script src="../js/waifu-tips.js"></script>
<script src="../js/live2d.js"></script>

<!-- 初始化看板娘，会自动加载指定目录下的 waifu-tips.json -->
<script type="text/javascript">initModel("./waifu/")</script>