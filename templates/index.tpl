{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}
<script type="text/javascript">
    var flashvars = {
        serverIp: "{$gamehost}",
        serverPort: "{$gameport }",
        resource: "{$resource }",
        serverId: "{$serverId }",
        serverName: "{$serverName}",
        openid: "{$opengameid}"
    };
    var params = {
        menu: "false",
        scale: "noScale",
        allowFullscreen: "true",
        allowScriptAccess: "always",
        bgcolor: "#000000",
        wmode: "direct"
    };
    var attributes = {
        id:"2DClient"
    };
    swfobject.embedSWF("2DClient.swf", "altContent", "100%", "100%", "10.0.0", "expressInstall.swf", flashvars, params, attributes);
</script>
<div id="altContent">
    <h1>2DClient</h1>
    <p>Alternative content</p>
    <p><a href="http://www.adobe.com/go/getflashplayer"><img
            src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
            alt="Get Adobe Flash player" /></a></p>
</div>
{include file="footer.tpl"}
