<script language="JavaScript">
// The following script is used to hide the calendar whenever you click the document.
document.onmousedown=function(e){
  var n=!e?self.event.srcElement.name:e.target.name;
  if (document.layers) {
    with (gfPop) var l=pageX, t=pageY, r=l+clip.width, b=t+clip.height;
    if (n!="popcal"&&(e.pageX>r||e.pageX<l||e.pageY>b||e.pageY<t)) gfPop.fHideCal();
    return routeEvent(e); // must use return here.
  } else if (n!="popcal") gfPop.fHideCal();
}
if (document.layers) document.captureEvents(Event.MOUSEDOWN);
</script>

<!--  PopCalendar(tag name and id must match) Tags should sit at the page bottom -->
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="Calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;">
</iframe>
