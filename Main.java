import com.dropbox.core.DbxRequestConfig;
import com.dropbox.core.v2.DbxClientV2;

import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.*;
import java.text.SimpleDateFormat;
import java.util.Date;


public class Main {
    public static void main(String[] args) {

    String ACCESS_TOKEN = ("-xbbpVIukuAAAAAAAAAHCO2W43TSnp98Y085UQjRn7UQx1HzyHdf9IPOnruecUBk");
        DbxRequestConfig config = DbxRequestConfig.newBuilder("dropbox/java-tutorial").build();
        DbxClientV2 client = new DbxClientV2(config, ACCESS_TOKEN);

        for(int i = 0; i < 2; i++) {
            try {

                SimpleDateFormat dateFormat = new SimpleDateFormat("yyyyMMdd_HHmmss");
                Date currentDate = new Date();

                BufferedImage image =  new Robot().createScreenCapture(new Rectangle(Toolkit.getDefaultToolkit().getScreenSize()));

                ByteArrayOutputStream aos = new ByteArrayOutputStream();

                ImageIO.write(image,"png",aos);
                Thread.sleep(500);
                InputStream in = new ByteArrayInputStream(aos.toByteArray());


                client.files().uploadBuilder( "/" + dateFormat.format(currentDate) + ".png")
                        .uploadAndFinish(in);
            } catch (Exception ex) {
                ex.printStackTrace();
            }
        }
    }
}

