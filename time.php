<html>
<head>
<script type="text/javascript">
function fetchData() {
	function addZero(i) {
        if (i < 10) {i = "0" + i}
        return i;
    }
    const d = new Date();
    let h = addZero(d.getHours());
    let m = addZero(d.getMinutes());
    let s = addZero(d.getSeconds());
    let time = h + ":" + m + ":" + s;
    console.log(time);
    if('17:01:20' ==  time){
        console.log('ส่งข้อความแล้ว');
    }
};
 
function initPage() {
	http = null;
	pageTimerHandle = setInterval('fetchData()', 1000);

};
 
window.onload = initPage;
</script>
</head>

</html>