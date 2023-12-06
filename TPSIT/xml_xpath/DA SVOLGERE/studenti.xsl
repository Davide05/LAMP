<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">     
   <xsl:template match = "/" >  
      
         <table border = "1" style="color:blue;font-size:40px" >
         
          <tr ><td> <xsl:text>Prima Query: estrae tutti i nomi degli studenti </xsl:text> </td>   
          <td>   <xsl:value-of select = ""/>,</td> </tr>  
          
          <tr > <td> <xsl:text>Seconda Query: estrae tutti i cognomi degli studenti </xsl:text></td>
          <td > <xsl:value-of select = "" />, </td>  </tr>
         
          <tr > <td> <xsl:text>Terza Query: estrae il nome dello studente con attributo ID="01" </xsl:text></td>
          <td > <xsl:value-of select = "" />,</td></tr>
         
          <tr > <td> <xsl:text> Query 6: estrae tutti gliindirizzi per ogni cognome di studente </xsl:text> </td>
          <td > <xsl:for-each select="">
                <xsl:value-of select=""/>:
                <xsl:for-each select="">
                <xsl:value-of select=""/>
                </xsl:for-each> <div> - </div>
                <br/>
                </xsl:for-each></td></tr>

           <tr> <td> <xsl:text> Query 7: per ogni studente estrae nome e indirizzo</xsl:text> </td>
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>:
                <xsl:value-of select=""/>
                <br/>
                </xsl:for-each></td></tr>

           <tr> <td> <xsl:text> Query 8: per ogni studente estrae il nome e indirizzo</xsl:text> </td>     
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>:
                <xsl:for-each select="">
                <xsl:value-of select=""/>
                </xsl:for-each>
                <br/>
                </xsl:for-each></td></tr>
                      
           <tr> <td> <xsl:text> Query 11: estrei nome e cognome e ID dello studente Paolo Verdi</xsl:text> </td>     
           <td> <xsl:value-of select="">
                </xsl:value-of>
                <br/>
                </td></tr> 

           <tr> <td> <xsl:text> Query 12: estrae tutti gli studenti con numero di telefono che comincia con 33 con nome e indirizzo</xsl:text> </td>     
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>: <xsl:value-of select=""/>
                <br/>
                </xsl:for-each></td></tr>
                
           <tr> <td> <xsl:text> Query 14: trova lo studente e il numero di telefono che comincia con 339</xsl:text> </td>     
           <td> <xsl:value-of select=""></xsl:value-of>
                <br/>
                </td></tr>

           <tr> <td> <xsl:text> Query 15: selezione l'ultimo studente</xsl:text> </td>     
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>
                <br/>
                </xsl:for-each></td></tr>

           <tr> <td> <xsl:text> Query 15: selezione il secondo studente</xsl:text> </td>     
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>
                <br/>
                </xsl:for-each></td></tr>

           <tr> <td> <xsl:text> Query 16: selezione primo studente e l'ultimo</xsl:text> </td>     
           <td> <xsl:for-each select="">
                <xsl:value-of select=""/>
                <br/>
                </xsl:for-each></td></tr> 

           <tr> <td> <xsl:text> Query 17: per ogni studente estrae il nome e per ogni cognome anche l'indirizzo]</xsl:text> </td>     
           <td> <xsl:param name="" select=""/>
                <xsl:for-each select="">
                <xsl:value-of select=""/>:
                <xsl:for-each select="">
                <xsl:value-of select=""/>
                <xsl:if test="">, </xsl:if>
                </xsl:for-each>
                <br/>
                </xsl:for-each></td></tr>   
              
         </table>  
 
   </xsl:template>  
</xsl:stylesheet>  