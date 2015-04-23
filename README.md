# simplerelayinfo

Simple way to get information about relays on Tor! The "s"-parameter stands for search and searches through relay-names. host_name, country_name, nickname, flags and consensus_weight are being parsed because they are the only important ones. 


This uses the onionoo API.


# Example

tor.php?s=chloe

IP: 104.167.104.205 | Country: Canada | Name: chloegaytard1 [..]

IP: 95.215.47.55 | Country: Sweden | Name: chloegaytard3  [..]

IP: 95.215.46.49 | Country: Sweden | Name: chloegaytard2  [..]
