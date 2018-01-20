
import java.util.Locale;
import java.util.Scanner;

public class P15_Censor_Email_Address {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String mail = scan.nextLine();
        String text = scan.nextLine();

        String username = mail.split("@")[0];
        String domain = mail.split("@")[1];
        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < username.length(); i ++) {
            sb.append("*");
        }
        String cens = sb.toString();
        String censoredMail = cens + "@" + domain;

        text = text.replaceAll(mail, censoredMail);
        System.out.println(text);

    }
}
