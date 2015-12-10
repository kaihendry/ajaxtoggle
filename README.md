# Search for a simpler toggle

All it does is touch/unlink $id into mute/ directory. Simply recording binary state.


I really really hate this code I have just written. Why?

* Depends on Jquery
* Took me several hours to write
* I hate how the PHP and Javascript mirror each other
* More than 50LOC for this is just too much imo
* If two people using the interface, there is a real risk of accidentally toggling the button to opposite of intended state !!

# BONUS

Authentication with Oauth2 or something. Right now I am assuming this API is
protected with Basic auth.
