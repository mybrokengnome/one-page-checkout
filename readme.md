# About
Super simple and straightforward plugin. Needed a way to mimic Infusionsoft's checkout forms, where you can only purchase one product per form. Plugins like WooCommerce One Page Checkout got close but had some downfalls, namely the user still had to add the items to the cart themselves. This plugin just registers a shortcode, grabs the id's from the shortcode and adds them to the cart, and then forwards the user to the checkout page. No extra fluff.

# Use
There's two ways to use this

You can either add products and include the checkout page on your page like this

[add_and_include product_ids="1748" empty_cart="1"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque facilisis mauris ac varius. Pellentesque euismod sem vitae auctor cursus. Suspendisse sed quam eu sem condimentum molestie vitae vitae neque. Vivamus porta efficitur nulla, in porta orci commodo a. Etiam congue est in cursus mollis. Vestibulum porttitor risus eu nisi viverra blandit. Pellentesque mattis semper eros. Cras mattis pellentesque pulvinar. Integer efficitur turpis in magna efficitur, ut posuere neque efficitur. Praesent tincidunt dui pharetra aliquam ultrices.

Fusce lacinia, arcu a tristique feugiat, felis augue porttitor ipsum, nec dapibus magna mauris et orci. Nam sed nunc sit amet sem fermentum aliquam. Phasellus efficitur mauris turpis, a mollis arcu vehicula id. Suspendisse potenti. In efficitur tellus quam, vel pulvinar mauris egestas ut. Etiam pulvinar leo lacus, in pulvinar ex laoreet at. Aenean sodales, orci eu facilisis feugiat, justo turpis dignissim elit, a congue nulla ante eget sem. Phasellus id facilisis risus, vitae pellentesque erat. Suspendisse fermentum nisi sit amet arcu hendrerit convallis. Donec finibus lorem ut dui rutrum, nec varius orci efficitur. Vestibulum in velit vitae elit ullamcorper tempus. Pellentesque faucibus tempus quam luctus porta.
[/add_and_include]

or you can use this short code, which adds all the product ids and then forwards to the checkout page. 

[add_and_forward product_ids="1748" empty_cart="1"]

empty_cart is optional, it will empty your entire shopping cart if set to 1


