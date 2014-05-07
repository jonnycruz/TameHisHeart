<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47458202-1']);
  _gaq.push(['_setDomainName', 'tamehisheart.com']);
  _gaq.push(['_trackPageview']);

 _gaq.push(['_addTrans',
    '<?php echo getcookieinfo("trans_id"); ?>',           // transaction ID - required
    '<?php echo 'Tame His Heart Checkout Variation Step 2'; ?>', // affiliation or store name
    '<?php echo '3.00'; ?>',          // total - required
    '<?php echo '0.00'; ?>',           // tax
    '<?php echo 'none'; ?>',          // shipping
    ' ',       // city
    ' ',     // state or province
    ' '             // country
 ]);
_gaq.push(['_addItem',
    '<?php echo getcookieinfo("trans_id"); ?>',           // transaction ID - necessary to associate item with transaction
    'THH Checkout Variation Step 2',           // SKU/code - required
    'Tame His Heart Checkout Variation Step 2',        // product name
    'none',   // category or variation
    '3,00',          // unit price - required
    '1'               // quantity - required
 ]);

_gaq.push(['_trackTrans']);

 (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


</script>