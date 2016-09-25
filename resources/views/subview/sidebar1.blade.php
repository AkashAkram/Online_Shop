<ul class="mainmenu">
  <li><img src="images/user.png" alt="User icon" class="icon"><span>Account<span></li>
    <ul class="submenu">
      <div class="expand-triangle"></div>
      <li><span>Basics</span></li>
      <li><span>Picture</span></li>
      <li><span>Go Premium</span></li>
    </ul>
  <li><img src="images/envelope.png" alt="Envelope icon" class="icon"><span>Messages</span><div class="messages">23</div></li>
    <ul class="submenu">
      <div class="expand-triangle"></div>
      <li><span>New</span></li>
      <li><span>Sent</span></li>
      <li><span>Trash</span></li>
    </ul>
  <li><img src="images/cog.png" alt="Cog icon" class="icon"><span>Settings</span></li>
    <ul class="submenu">
      <div class="expand-triangle"></div>
      <li><span>Language</span></li>
      <li><span>Password</span></li>
      <li><span><a href="http://www.jqueryscript.net/tags.php?/Notification/">Notification</a>s</span></li>
      <li><span>Privacy</span></li>
      <li><span>Payments</span></li>
    </ul>
  <li><img src="images/key.png" alt="Key icon" class="icon"><span>Logout</span></li>
</ul>

<script type="text/javascript" src="menutoggle/js/retina.min.js"></script>

<script type="text/javascript" src="menutoggle/js/script.js"></script>

<script type="text/javascript">
  $(document).ready( function() {
  var $submenu = $('.submenu');
  var $mainmenu = $('.mainmenu');
  $submenu.hide();
  $submenu.first().delay(400).slideDown(700);
  $submenu.on('click','li', function() {
    $submenu.siblings().find('li').removeClass('chosen');
    $(this).addClass('chosen');
  });
  $mainmenu.on('click', 'li', function() {
    $(this).next('.submenu').slideToggle().siblings('.submenu').slideUp();
  });
  $mainmenu.children('li:last-child').on('click', function() {
    $mainmenu.fadeOut().delay(500).fadeIn();
  });
});

</script>