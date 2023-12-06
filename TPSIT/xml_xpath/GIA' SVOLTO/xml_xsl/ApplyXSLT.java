/**
 * posizionarsi nella cartella /workspace/LAMP/TPSIT/xml_xpath/GIA' SVOLTO/
 * javac xml_xsl/ApplyXSLT.java 
 * java xml_xsl.ApplyXSLT
 */
package xml_xsl;

import javax.xml.transform.*;
import javax.xml.transform.stream.StreamSource;
import javax.xml.transform.stream.StreamResult;
import java.io.File;
import java.io.IOException;
import java.awt.Desktop;

public class ApplyXSLT {
    public static void main(String[] args) {
        try {
            TransformerFactory factory = TransformerFactory.newInstance();
            Source xslt = new StreamSource(new File("maestri.xsl"));
            Transformer transformer = factory.newTransformer(xslt);

            Source xml = new StreamSource(new File("maestri.xml"));
            transformer.transform(xml, new StreamResult(new File("output.html")));
            try {
                File xmlFile = new File("output.html");
                if (xmlFile.exists() && Desktop.isDesktopSupported()) {
                    Desktop.getDesktop().open(xmlFile);
                }
            } catch (IOException e) {
                e.printStackTrace();
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}