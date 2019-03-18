<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-17
 * Time: 01:17
 */
?>
<!--Live2D-->
<link rel="stylesheet" type="text/css" href="live2d/assets/waifu.css"/>
<div class="waifu" style="">
    <div class="waifu-tips"></div>
    <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
    <div class="waifu-tool">
        <span class="fui-home"></span>
<!--        <span class="fui-chat"></span>-->
<!--        <span class="fui-eye"></span>-->
<!--        <span class="fui-user"></span>-->
        <span class="fui-photo"></span>
<!--        <span class="fui-info-circle"></span>-->
        <span class="fui-cross"></span>
    </div>
</div>
<script src="live2d/assets/jquery-ui.min.js"></script>
<script src="live2d/assets/waifu-tips.js"></script>
<script src="live2d/assets/live2d.js"></script>
<script type="text/javascript">
    // 默认模型
    live2d_settings['modelId']              = 1;            // 默认模型 ID，可在 F12 控制台找到
    live2d_settings['modelTexturesId']      = 87;           // 默认材质 ID，可在 F12 控制台找到
    live2d_settings['waifuEdgeSide']  = 'right:0';
    // other
    live2d_settings['showHitokoto']         = true;         // 显示一言
    live2d_settings['showF12Status']        = true;         // 显示加载状态
    live2d_settings['showF12Message']       = false;        // 显示看板娘消息
    live2d_settings['showF12OpenMsg']       = true;         // 显示控制台打开提示
    live2d_settings['showCopyMessage']      = true;         // 显示 复制内容 提示
    live2d_settings['showWelcomeMessage']   = true;         // 显示进入面页欢迎词
    initModel("live2d/assets/waifu-tips.json?v=1.4.2")
</script>