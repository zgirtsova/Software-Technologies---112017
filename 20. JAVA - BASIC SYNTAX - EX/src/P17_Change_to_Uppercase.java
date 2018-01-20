import java.util.Locale;
import java.util.Scanner;

public class P17_Change_to_Uppercase {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String text = scan.nextLine();

        for (int i = 0; i < text.length(); i++) {
            int startI = text.indexOf("<upcase>");
            int endI = text.indexOf("</upcase>");

            if (startI == -1 || endI == -1) break;
            String toBeRepl = text.substring(startI + 8, endI);
            text = text.replace("<upcase>" + toBeRepl + "</upcase>", toBeRepl.toUpperCase());
            i = startI;
        }
        System.out.println(text);

    }
}
