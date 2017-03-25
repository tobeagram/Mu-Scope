# Mu-Scope
**Museum-Scope** <em>is a web interface designed to enable anyone to interact with and learn about digitised specimens from the Museum of Life Sciences using the 3D Unity Web Player.</em>

## Features 
The website is a complete package, ranging from a simple custom favicon to a complex responsive xml/php integration. There are five main pages and these are:

###### /welcome
This landing page serves to advertise new events happening on the website or at the museum, as well as welcoming new visitors.

###### /exhibitions
This is a modular page automatically pulls information on exhibitions by php from an xml file. All exhibitions are displayed in a responsive tile format. Upon clicking an exhibition all the specimens dissolve in, and are displayed in a tiled card format.

###### /specimen
Each specimen page is laid out in the same way. With a few paragraphs describing the characteristics of the living organism. A virtual viewer loads the specimen using Unity Engine. Instructions on how to use the viewer are present along with a fullscreen button. To aid learning about the specimen there are three different features to look out for and these range from Easy (Key Stage Level) to Tough (University Level). So there is something for everyone to learn abut, from academics to pupils.

###### /what’s on
Displays a live twitter feed from the museum’s account as well as responsive social link buttons.

###### /about
A brief history of the museum and well as contact information.

## Modelling Process

In order to achieve a very crisp and clean 3D model from a Computed Tomography Scan, many different methods were tried. The best method involved using the following applications:

- **[OsiriX](http://www.osirix-viewer.com)** this was used to segment the DICOM files, separating Region’s Of Interest and converting the slices into a 3D .stl file.
- **[Meshmixer](http://meshmixer.com)**, here specimens could be ‘cleaned up’ and any anomalies such as wire and nails were removed.
- **[Blender](https://www.blender.org)**, used to fill in holes and edit the co-ordinate origin of the specimen.
- **[Unity](http://unity3d.com)**, added lighting, and a custom texture to the specimen. A user interface and the ability to interact with the model created by Dr James Housden was also included. This package is then exported and drag and dropped into the website directory.

#### Further Instructions #### 
To add a new collection (March 2017): 
- Add the collection's XML file under ```XML``` folder. This file should be called with exactly the same name as the collection. 
- Edit the index.php file to include the new collection name

## Acknowledgments
<b>Written and Designed by Tobias Whetton</b> over the course of three months. This wouldn’t have been possible without the help and expertise of: 

- <b>Dr Rashed Karim</b> Project Supervisor
- <b>Professor Kawal Rhode</b> Tutor/Supervisor
- <b>Joemon John</b> Superintendent Radiographer
- <b>Dr Gillian Sales</b> Museum of Life Sciences Curator
- <b>Dr James Housden</b> Research Fellow
