<!-- JS Calendar -->
<link rel="stylesheet" href="../dist/TavoCalendar-master/dist/tavo-calendar.css" />
<script src="../dist/TavoCalendar-master/dist/tavo-calendar.js"></script>
<script src="../dist/TavoCalendar-master/dist/moment.min.js"></script>
<style type="text/css">
    .tavo-calendar{
        max-width: 100%!important;
        min-width: 100%!important;
    }
</style>
<nav class="sidebar-nav"> 
    <ul id="sidebarnav" style="background-color: #192B68!important;width:100%!important;">
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php?src=dashboard"
                aria-expanded="false">
                <i class="mdi mdi-av-timer"></i>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <br>
        <div style="padding: 1% 3%;">
        <span style="color:#fff;margin-left: 1%;">FILTER OPTIONS:</span>
        <select class="form-control" onchange="filterOption(this.value)">
            <option selected value="perday">Per Day</option>
            <option value="daterange">Date Range</option>
        </select><br>

        <div id="from-date" style="width:100%!important;">
            <span style="color:#fff;margin-left: 1%;">FROM DATE:</span>
            <!-- <input type="date" class="form-control"> -->
            <div id="from-calendar" style="padding: 0;font-size:24px;max-width: 100%!important;"></div>
        </div>
        <div id="to-date" style="width:100%!important;display:none;">
            <br>
            <span style="color:#fff;margin-left: 1%;">TO DATE:</span>
            <!-- <input type="date" class="form-control"> -->
            <div id="to-calendar" style="padding: 0;font-size:24px;max-width: 100%!important;"></div>
        </div><br>
        </div>
    </ul>
</nav>

<script type="text/javascript">
    const fromCalendar = new TavoCalendar('#from-calendar', {
       
          future_select: false,
          past_select: true,
          
    })

    const toCalendar = new TavoCalendar('#to-calendar', {
       
          future_select: false,
          past_select: true,
          
    })

    function filterOption(opt){
        if(opt=="perday"){
            document.querySelector("#to-date").style.display = "none";
        }else if(opt=="daterange"){
            document.querySelector("#to-date").style.display = "block";
        }
    }
</script>