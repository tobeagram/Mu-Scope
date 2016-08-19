# Mu-Scope
**Museum-Scope** <em>A web interface, to interact and learn about digitised specimens from the Museum of Life Sciences, using Unity Web Player and the open-source DWV viewer.</em>


##### THE **ORBIT** UPDATE <small>[Release 2.0]</small>
This update includes a lot of changes and is a result of a month’s work. In order to break down the changes, they are listed by ‘page’:

###### /welcome
- **Welcome page overhaul.** It now presents the new ‘Dozen Skulls’ exhibition and includes a unique photograph of the museum’s rare thylacine skull.

###### /exhibitions
- **Collections renamed to exhibitions.** Rather than categorising the whole museum and splitting the specimens up into collections. The focus has moved to a modular exhibition’s style, where new small enticing exhibitions can be added, providing a “taster experience” of the museum.
- **A Dozen Skulls exhibition added.** This is the first exhibition and it contains a dozen interesting skull specimens ranging from a lion to a flamingo. Royalty free images have been added, however they are subject to change. <small>Please note the information/text in each of the specimens is a placeholder at the moment and due to space only the hedgehog has the unity player present.</small>
- **Fixed issues with the card view.** The card style view listing the specimens in an exhibition has been fixed. They no longer merge and the footer is now clearly separate. Now the UI is responsive and is supported on all devices, from phones to tablets to desktops.

###### /specimen
- **Specimen’s page information reordered.** The order of the page has been changed and the corresponding xml/php code has been edited to reflect this. The order is now title, latin name, photograph in the wild, brief introduction about animal, 3D Unity viewer, Unity viewer description, CT scan Link. This new structure makes each specimen interesting without seeming to overwhelming.
- **Unity Viewer fully optimised.** After a lot of tinkering the balance between speed and quality has been found. The textures are now only a few KB with the rest of the file size due to the mesh of the object. It works on all supported browsers, without input lag. The lighting has been adapted so the planar view is more effectively highlighted.
- **Unity Player now has fullscreen view.** Unity web player can now go into fullscreen in all browsers without an issue and return to its original size. However when running in Safari this function has been disabled, as Safari does not allow for Keyboard input in fullscreen view.
- **Unity Player controls explained.** Now a little help popup box  is present for those new to exploring the specimen, teaching them the controls of how to interact with it in 3D/planar view.
- **3D view instructions.** Three levels of things to look out for  in the 3D specimen have been included; varying from Easy, to Mild and finally to Tough. With Easy aimed at Key Stage Level, Mild aimed at GCSE/A Level, and Tough aimed at University Level.
- **DICOM Viewer still present in code but not displayed.** Unity’s built in planar view is better than the dmv web viewer, however it is less accurate. In a future release the DICOM viewer will be implemented as a link onto a separate page; due to the files being quite large. Another bonus of the DICOM viewer is that it works on mobile devices whereas Unity currently doesn’t.

###### /events
- **Page now includes embedded live twitter feed.** The twitter feed displays the latest things happening at the museum, and will be used to advertise upcoming events.
- **Custom social links.** The museum is gaining a larger online presence and will be signing up to other social networks in the near future.

###### /general
- **Cross-browser support.** Fully functioning on Chrome/Firefox/Safari/Internet Explorer/Edge. 
- **Full mobile support.** The html/css has been adapted for mobiles (through the use of @media). An important purpose of this is that the website can be viewed by visitors of the museum on their phones. So they can bring up detailed tailored information for each specimen when they see it in person. The electronic exhibition works in harmony with the physical counterpart.
- **Fixed all previous bugs.** Stl viewer now changes with each different specimens. Navbar-toggle has been fixed. PHP/XML now works flawlessly.
- **Favicon created.** Museum now has a custom favicon and corresponding titles for each page.



## ROADMAP 

### Priority things to do

- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Unity Player working inline on the specimen page** directly integrated into the HTML/JS/CSS code.
- [x] **Point specimen page template to xml file using php** so with every different specimen the information, dicom and stl are different but the format will always be the same.
- [x] **Get Dicom Viewer working inline on specimen page**, use iframes. A test shows that the iframes are the solution and works really well.
- [x] **Enhance the Unity Web Player**. Perhaps add numbers or labels? Make it easier to learn about the features and the markings etc. This could be difficult with each specimen, it will be hard to add new labels every time. Also and improvement of lighting and textures.
- [ ] **Add 3D models and corresponding information**, to each of the specimens in the Dozen Skulls exhibiton.
- [ ] **Find server space** for the website.

### Other things to do

- [x] **Write css template** to overlay the bootstrap theme. (Custom fonts, introduce some subtle colour etc).
- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Create a homepage** so there is a small introduction about the life sciences museum, and then five different divs for each collection (the Zoological Collection, Botanical Collection, Pharmaceutical Collection, Microscope Slide Collection, Craniofacial Skeletal Collection). The navbar at the top should include (HOME, COLLECTIONS, WHAT’S ON, ABOUT).
- [x] **Zoological collection page** or the current landing page, needs photos. Go to the Life Sciences musuem to take some pictures for use on the website.

### Bugs

- [x] **img placeholder** needs to be replaced with xml file image. At current, an img folder has been created to serve as a place for the jpg files. 
- [x] **Dicom and Stl viewer do not change model with different specimen**, at the moment the Dicom Viewer is stuck on the hedgehog skull.
- [x] **fullscreen unity player** - the button fails to work and has been commented out at the moment.
- [x] **PHP/XML has issues** with finding new specimens.
- [x] **navbar-toggle** stuck on white on mobile devices


### New Ideas and Suggestions

- **[Sketchfab](https://sketchfab.com/models/209bffe6866042379a704ce46bb6e632)** - example from the natural history museum in Oxford. Same thing as what we are doing however will be harder to implement it all automatically. Quality is very good though, useful for ideas. Has google cardboard support which could be interesting.
- **[MuseumofLifeSciences.com](MuseumofLifeSciences.com)** is now owened by the musuem.
- **[000Webhost](000Webhost.com) can be used to run the website for free** however there are drawbacks. It will not pull from the github repository, and the space is limited, but may be good for a demo.
