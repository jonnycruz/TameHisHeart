<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47458202-1']);
  _gaq.push(['_setDomainName', 'tamehisheart.com']);
  _gaq.push(['_trackPageview']);

 _gaq.push(['_addTrans',
    '<?php echo getcookieinfo("trans_id"); ?>',           // transaction ID - required
    '<?php echo 'Tame His Heart TOB CHECKOUT 1'; ?>', // affiliation or store name
    '<?php echo '1.50'; ?>',          // total - required
    '<?php echo '0.00'; ?>',           // tax
    '<?php echo 'none'; ?>',          // shipping
    ' ',       // city
    ' ',     // state or province
    ' '             // country
 ]);
_gaq.push(['_addItem',
    '<?php echo getcookieinfo("trans_id"); ?>',           // transaction ID - necessary to associate item with transaction
    'THH TOB Checkout 1',           // SKU/code - required
    'Tame His Heart TOB Checkout 1',        // product name
    'none',   // category or variation
    '1.50',          // unit price - required
    '1'               // quantity - required
 ]);

_gaq.push(['_trackTrans']);

 (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


</script>