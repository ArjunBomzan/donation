
<?php
include("../misc/functions.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OCMS</title></title>
        <link rel="stylesheet" href="<?php echo url('css/bootstrap.min.css'); ?>">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">       
 
<style>
:root {
  --yt-blue: #0f5fd3; /* This is a custom color used by YouTube */
}

/* Custom card header */
.card-header {
  display: flex;
  justify-content: space-between;
  padding-left: 16px !important;
  align-items: center;
  height: 48px;
  overflow: hidden;
}

.donate-icon {
  display: flex;
  align-self: stretch;
  align-items: center;
  position: relative;
  padding-right: 1.2rem;
  float: right;
  background: #dadada;
}

.donate-icon:before {
  content: "";
  position: absolute;
  display: block;
  width: 48px;
  height: 48px;
  transform: rotate(45deg) translate(-50%,50%);
  background: #dadada;
}

.donate-icon i {
  color: #187415;
  background: #fff;
  padding: 8px;
  z-index: 1;
  border-radius: 50%;
}

.avatar {
  max-width: 50px;
}

.fundraiser {
  display: flex;
  align-items: flex-start;
}

.fundraiser .name {
  font-size: 1rem;
}

.fundraiser .creator {
  font-size: .785rem;
}

.fundraiser .details {
  flex: 1;
}

/* Ugly workaroung - sorry :( */
.btn-donate, .btn-donate:hover, .btn-donate:active, .btn-donate:focus {
  background: var(--yt-blue);
  color: #fff;
}

.sum {
  text-align: center;
  font-weight: 500;
}

.card-footer a {
  font-size: .785rem;
  font-weight: 500;
}

/* Popover styles */
.popover-blue {
  background: var(--yt-blue);
  border-radius: 0;
}

.popover-blue .arrow:after {
  border-bottom-color: var(--yt-blue) !important;
}

.popover-blue .popover-body {
  color: #fff;
  font-size: .785rem;
}

.btn-dismiss {
  float: right;
  box-shadow: none;
}


</style>
</head>
    <body>
<!-- Donation Card -->
<div class="card mt-4 mx-auto" style="max-width: 25rem;">
  <div class="card-header p-0">
    <span class="d-inline-block card-title mb-0">Donate now</span>
    <span class="donate-icon">
      <i class="fas fa-hand-holding-heart"></i>
    </span>
  </div>
  <div class="card-body">
    <div class="fundraiser">
      <img src="../images/esewa.jpg" class="avatar" />
      <div class="details px-2">
        <h3 class="name mb-0"><strong>Donate Using Esewa</strong></h3>
        <span class="creator text-muted">Now we can </span>
      </div>
      <button class="btn btn-md btn-donate z-depth-0 bg-success" data-toggle="popover" data-placement="bottom" >
      <a href="https://esewa.com.np/#/home"class="text-light">Donate</a></button>
    </div>
    <p class="mt-3 mb-0 sum">Soon we will provide this features</p>
    <p class="mt-3 mb-0 sum">Can use id to donate:985425251852</p>
  </div>
  <div class="card-footer">
    <a class="text-uppercase text-muted">Show more</a>
  </div>
</div>
<!-- /.Donation Card -->
</body>
<script>
$(function () {

// Whitelist buttons in popovers
var myDefaultWhiteList = $.fn.tooltip.Constructor.Default.whiteList
myDefaultWhiteList.button = [];

// Customizer popover
var $tip = $('.btn-donate').popover({
  trigger: 'manual', // We don't want popover to launch when we don't need it :)
  html: true,
  offset: '-100px, 0',
  container: 'body',
  content: function () {
    return '<p>' + $(this).data('description') + '</p><button class="btn btn-sm btn-dismiss white-text z-depth-0 pr-0">Got it</button>';
  },
  template: '<div class="popover popover-blue" role="tooltip"><div class="arrow"></div><div class="popover-body"></div></div>'
});

// Manually show popover
$tip.popover('show');

// Handle popover dismiss
$('.btn-dismiss').on('click', function () {
  $tip.popover('hide');
});
});
</script>
</html>