curl -XPOST http://graylog.example.org:12202/gelf -p0 -d '{"short_message":"Hello there", "host":"example.org", "facility":"test", "_foo":"bar"}'
<?php

// Muestra toda la información, por defecto INFO_ALL
phpinfo();

// Muestra solamente la información de los módulos.
// phpinfo(8) hace exactamente lo mismo.
phpinfo(INFO_MODULES);

?>
