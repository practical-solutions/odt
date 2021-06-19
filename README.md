# ODT-Plugin: Modified - Export to Microsoft doc format

Simply added a button to generate a MS Doc file by using Libreoffice. Modified version of the [ODT Plugin](https://github.com/lpaulsen93/dokuwiki-plugin-odt)

Actually, this plugin just adds another command line converting option (derived from the pdf conversion). The necessary changes in the converted document type can be set in the configuration area, i.e. the file extension (e.g. ```doc``` or ```docx```)

The ```doc``` format was chosen because the generated ```docx``` files could not be opened by Word 2019 (though it was possible with LibreOffice and OnlyOffice).

Changing to ```docx``` can thus simply be achieved by changing following options
* ```doc convert command``` =  ```libreoffice --headless --convert-to docx --outdir %outdir% %sourcefile% 2>&1'```
* ```doc file extension```  = ```docx```;

