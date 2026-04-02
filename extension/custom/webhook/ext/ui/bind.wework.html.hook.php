

<script>
var actionBar = document.querySelector(".panel-title");
var o = document.createElement("button");
o.innerHTML = "绑定当前webhook到企业微信用户"
o.className = "btn danger"
o.type = "button"

const match = window.location.href.match(/webhook-bind-(\d+)/);
const id = match ? match[1] : null;


o.addEventListener('click', function(e) {
    let _this = e.target;
    return window.open(window.location.origin  + `<?php echo helper::createLink('wework','bind') ?>` + `?webhookID=${id}`)
})

actionBar.appendChild(o,actionBar);

</script>
