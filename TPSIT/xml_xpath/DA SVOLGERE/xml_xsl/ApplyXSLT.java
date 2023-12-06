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
            Source xslt = new StreamSource(new File("C:\\eclipse-workspace_2\\Socket2\\src\\xml_xsl\\maestri.xsl"));
            Transformer transformer = factory.newTransformer(xslt);

            Source xml = new StreamSource(new File("C:\\eclipse-workspace_2\\Socket2\\src\\xml_xsl\\maestri.xml"));
            transformer.transform(xml, new StreamResult(new File("C:\\eclipse-workspace_2\\Socket2\\src\\xml_xsl\\output.html")));
            try {
                File xmlFile = new File("C:\\eclipse-workspace_2\\Socket2\\src\\xml_xsl\\output.html");
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