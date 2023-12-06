<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">     
     <xsl:template match = "/" >  
          <table border = "1" style="color:blue;font-size:40px" >
               <tr >
                    <td> <xsl:text>Prima Query: estrae tutte le opere dei pittori </xsl:text> </td>   
                    <td> <xsl:value-of select = "/"/> </td> 
               </tr>  
               <tr > 
                    <td> <xsl:text>Seconda Query: estrae tutti i cognomi degli studenti </xsl:text> </td>
                    <td> <xsl:value-of select = "/scuola/studente/nominativo/cognome" /> </td>  
               </tr>
               <tr > 
                    <td> -------------------------------------- </td>
                    <td> -------------------------------------- </td>
               </tr>
               <tr > 
                    <td> <xsl:text>Terza Query: estrae il nome dello studente con attributo ID="01" </xsl:text> </td>
                    <td> <xsl:value-of select = "/scuola/studente/nominativo" /> </td>
               </tr>

         </table>  
   </xsl:template>  
</xsl:stylesheet>  