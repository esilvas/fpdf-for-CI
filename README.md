fpdf-for-CI
===========

fpdf on CodeIgniter

**Introduction**
The fpdf library found on [fpdf.org](http://fpdf.org/) must be loaded as a library to be used while following proper CI syntax.

**HowTo**
You must first load the fpdf class as a CI Library. This can be done in the autoload file application/config/autoload.php (preferred) or within individual controllers.

```php

$this->load->library('fpdf');

```

Now, you can use it natively within CI.
```php

$this->load->library('fpdf');
$filename =  somefile;
$content = 'My Content';
$basepath = getcwd;

$this->fpdf->fpdf('P','mm','A4');
$this->fpdf->AddPage();
$this->fpdf->SetFont('Arial','B',16);
$this->fpdf->Cell(40, 10, $content);
$this->fpdf->Output($basepath.'/pdf/'.$filename.'.pdf');   // print to the filesystem, save for future download
$this0>fpdf->Output($filename.'.pdf', 'D');                // send to browser and force download, not saved on filesystem

```
Note: You must load initialize the class with parameters each time you use it, i.e. call $this->fpdf->('P','mm','A4'). 
