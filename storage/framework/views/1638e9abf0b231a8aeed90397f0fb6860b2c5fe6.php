<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.1/tinymce.min.js"></script>

<script src="<?php echo e(asset('assets/js/core/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap-switch.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery.bootstrap-wizard.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap-selectpicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap-tagsinput.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jasny-bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/jquery-jvectormap.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/nouislider.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/chartjs.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins/bootstrap-notify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/paper-dashboard.min790f.js?v=2.0.1')); ?>"></script>
<script src="<?php echo e(asset('assets/demo/demo.js')); ?>"></script>
<script src="<?php echo e(asset('assets/demo/jquery.sharrre.js')); ?>"></script>
<script src="<?php echo e(asset('buttons.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/mask.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!-- Place this tag in your head or just before your close body tag. -->

<script type="text/javascript">
    tinymce.init({
        selector: '.crud-richtext'
    });
</script>
<script type="text/javascript">
    $(function () {
        // Navigation active
        $('ul.navbar-nav a[href="<?php echo e("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>"]').closest('li').addClass('active');
    });
</script>
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<script>
  function pagePaginathing(){
    // Returns an array of maxLength (or less) page numbers
    // where a 0 in the returned array denotes a gap in the series.
    // Parameters:
    //   totalPages:     total number of pages
    //   page:           current page
    //   maxLength:      maximum size of returned array
    function getPageList(totalPages, page, maxLength) {
      if (maxLength < 5) throw "maxLength must be at least 5";

      function range(start, end) {
          return Array.from(Array(end - start + 1), (_, i) => i + start); 
      }

      var sideWidth = maxLength < 9 ? 1 : 2;
      var leftWidth = (maxLength - sideWidth*2 - 1) >> 1;
      var rightWidth = (maxLength - sideWidth*2 - 2) >> 1;
      if (totalPages <= maxLength) {
          // no breaks in list
          return range(1, totalPages);
      }
      if (page <= maxLength - sideWidth - 1 - rightWidth) {
          // no break on left of page
          return range(1, maxLength-sideWidth-1)
              .concat([0])
              .concat(range(totalPages-sideWidth+1, totalPages));
      }
      if (page >= totalPages - sideWidth - 1 - rightWidth) {
          // no break on right of page
          return range(1, sideWidth)
              .concat([0])
              .concat(range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
      }
      // Breaks on both sides
      return range(1, sideWidth)
          .concat([0])
          .concat(range(page - leftWidth, page + rightWidth)) 
          .concat([0])
          .concat(range(totalPages-sideWidth+1, totalPages));
    }

    $(function () {
      // Number of items and limits the number of items per page
      var numberOfItems = $("#tbody tr").length;
      var limitPerPage = 25;
      // Total pages rounded upwards
      var totalPages = Math.ceil(numberOfItems / limitPerPage);
      // Number of buttons at the top, not counting prev/next,
      // but including the dotted buttons.
      // Must be at least 5:
      var paginationSize = 13; 
      var currentPage;

      function showPage(whichPage) {
        if (whichPage < 1 || whichPage > totalPages) return false;
        currentPage = whichPage;
        $("#tbody tr").hide()
            .slice((currentPage-1) * limitPerPage, 
                    currentPage * limitPerPage).show();
        // Replace the navigation items (not prev/next):            
        $(".pagination li").slice(1, -1).remove();
        getPageList(totalPages, currentPage, paginationSize).forEach( item => {
            $("<li>").addClass("page-item")
                     .addClass(item ? "current-page" : "disabled")
                     .toggleClass("active", item === currentPage).append(
                $("<a>").addClass("page-link").attr({
                    href: "javascript:void(0)"}).text(item || "...")
            ).insertBefore("#next-page");
        });
        // Disable prev/next when at first/last page:
        $("#previous-page").toggleClass("disabled", currentPage === 1);
        $("#next-page").toggleClass("disabled", currentPage === totalPages);
        return true;
      }

      // Include the prev/next buttons:
      $(".pagination").append(
        $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
            $("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"}).text("Prev")
        ),
        $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
            $("<a>").addClass("page-link").attr({
                href: "javascript:void(0)"}).text("Next")
        )
      );
      // Show the page links
      $("#tbody").show();
      showPage(1);

      // Use event delegation, as these items are recreated later    
      $(document).on("click", ".pagination li.current-page:not(.active)", function () {
          return showPage(+$(this).text());
      });
      $("#next-page").on("click", function () {
          return showPage(currentPage+1);
      });

      $("#previous-page").on("click", function () {
          return showPage(currentPage-1);
      });
    });
  }
  function rupiah(){
    $('.uang').mask('0.000.000.000', {reverse: true});
  }

  function kode(){
    $('.kode').mask('000', {reverse: true});
  }

  function noHP(){
    $('.noHP').mask('0000-0000-00000', {reverse: true});
  }

  function ktp(){
    $('.ktp').mask('00000000000000000', {reverse: true});
  }

  function luasna(){
    $('.luasna').mask('0.000.000.000.00', {reverse: true});
  }

  var select_all = document.getElementById("select_all"); //select all checkbox
    var checkboxes = document.getElementsByClassName("checkbox"); //checkbox items

    //select all checkboxes
    select_all.addEventListener("change", function(e){
      for (i = 0; i < checkboxes.length; i++) { 
        checkboxes[i].checked = select_all.checked;
      }
    });


    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){
            select_all.checked = false;
        }
        //check "select all" if all checkbox items are checked
        if(document.querySelectorAll('.checkbox:checked').length == checkboxes.length){
            select_all.checked = true;
        }
      });
    }

  $(document).ready(function() {

    $sidebar = $('.sidebar');
    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');
    sidebar_mini_active = true;

    window_width = $(window).width();

    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

    // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
    //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
    //         $('.fixed-plugin .dropdown').addClass('show');
    //     }
    //
    // }

    $('.fixed-plugin a').click(function(event) {
      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
      if ($(this).hasClass('switch-trigger')) {
        if (event.stopPropagation) {
          event.stopPropagation();
        } else if (window.event) {
          window.event.cancelBubble = true;
        }
      }
    });

    $('.fixed-plugin .active-color span').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-active-color', new_color);
      }

      if ($full_page.length != 0) {
        $full_page.attr('data-active-color', new_color);
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-active-color', new_color);
      }
    });

    $('.fixed-plugin .background-color span').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-color', new_color);
      }

      if ($full_page.length != 0) {
        $full_page.attr('filter-color', new_color);
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-color', new_color);
      }
    });

    $('.fixed-plugin .img-holder').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).parent('li').siblings().removeClass('active');
      $(this).parent('li').addClass('active');


      var new_image = $(this).find("img").attr('src');

      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        $sidebar_img_container.fadeOut('fast', function() {
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $sidebar_img_container.fadeIn('fast');
        });
      }

      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $full_page_background.fadeOut('fast', function() {
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          $full_page_background.fadeIn('fast');
        });
      }

      if ($('.switch-sidebar-image input:checked').length == 0) {
        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
      }
    });

    $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
      $full_page_background = $('.full-page-background');

      $input = $(this);

      if ($input.is(':checked')) {
        if ($sidebar_img_container.length != 0) {
          $sidebar_img_container.fadeIn('fast');
          $sidebar.attr('data-image', '#');
        }

        if ($full_page_background.length != 0) {
          $full_page_background.fadeIn('fast');
          $full_page.attr('data-image', '#');
        }

        background_image = true;
      } else {
        if ($sidebar_img_container.length != 0) {
          $sidebar.removeAttr('data-image');
          $sidebar_img_container.fadeOut('fast');
        }

        if ($full_page_background.length != 0) {
          $full_page.removeAttr('data-image', '#');
          $full_page_background.fadeOut('fast');
        }

        background_image = false;
      }
    });


    $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
      $body = $('body');

      $input = $(this);

      if (paperDashboard.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        paperDashboard.misc.sidebar_mini_active = false;

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

      } else {

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

        setTimeout(function() {
          $('body').addClass('sidebar-mini');

          paperDashboard.misc.sidebar_mini_active = true;
        }, 300);
      }

      // we simulate the window Resize so the charts will get updated in realtime.
      var simulateWindowResize = setInterval(function() {
        window.dispatchEvent(new Event('resize'));
      }, 180);

      // we stop the simulation of Window Resize after the animations are completed
      setTimeout(function() {
        clearInterval(simulateWindowResize);
      }, 1000);

    });

  });
</script>



<script>
  $(document).ready(function() {
    $('#datatable').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });

    var table = $('#datatable').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>

<script>
  $(document).ready(function() {
    // initialise Datetimepicker and Sliders
    demo.initDateTimePicker();
    if ($('.slider').length != 0) {
      demo.initSliders();
    }
  });
</script>