<snippet>
  <content>
#MVC pattern design sample
sample my understanding of MVC design pattern 

by using this design pattern 
Controller will manage data provide by model , and output to selected format
Model will done all data collection, data calculation and many. act as data provider 
View with this sample is HTML output , in actual case we can replace it with others template so it can output as PDF, csv file format, or any kind of formated output.

## Usage
by seperate data-display-and controller will make the code is more easy to understanding and 
usefull for maintainance of large project.

## File 
Controller.php is a base class for Controller any extra function for base controller just edit here
Model.php is a base class for Model any extra function for base model function just  edit here
View.php is a simple Class to process template view we given with data we collect 

HelloController.php a simple Hello Controller class collect data from HelloModel and call View class
to display it.
HelloModel.php a simple class providing data to controller class
HelloView.php a simple html page with some php coding as display template.

mvc_call.php show how the controller call by php.
## Credits
qqtan
</content>
</snippet>
> Written with [StackEdit](https://stackedit.io/).


