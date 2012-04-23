ch <- read.csv("/Users/oleg/Downloads/schweiz_volk_kanton.csv", header=TRUE, sep=",")

// http://stackoverflow.com/questions/3257441/geocoding-in-r-with-google-maps
for(i in 1:nrow(ch)) { fin <- cbind(ch,gg=gGeoCode(ch$Location[i]))}
for(i in 1:25) { print(gGeoCode(ch$Location[i]))}

radius <- sqrt(ch$Number / pi)
symbols(ch$Lat, ch$Lon, circles=radius, inches=0.5,fg="white",bg="red")
