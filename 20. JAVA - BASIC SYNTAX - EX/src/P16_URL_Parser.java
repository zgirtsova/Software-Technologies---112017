import java.util.Locale;
import java.util.Scanner;

public class P16_URL_Parser {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String input = scan.nextLine();

        String protocol = input.split("://")[0];
        String server = input;
        String resource = "";

        if (!protocol.equals("")) {
            // protocol is found, so...
            input = input.split("://")[1];
            // holds server + resource
            int slashIndex = input.indexOf("/");

            if (slashIndex != -1) {
                //resource is found
                server = input.split("/")[0];
                resource = input.substring(slashIndex + 1);
            } else {
                // resource is not found, server is:
                server = input;
            }

        }
        System.out.println("[protocol] = \"" + protocol + "\"");
        System.out.println("[server] = \"" + server + "\"");
        System.out.println("[resource] = \"" + resource + "\"");

    }
}

