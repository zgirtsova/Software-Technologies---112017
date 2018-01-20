import java.util.Locale;
import java.util.Scanner;

public class P03_Reverse_Characters {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String str = "";
        for (int i = 0; i < 3; i++) {
            str += scan.nextLine();
        }
        for (int i = 2; i >= 0 ; i--) {
            System.out.print(str.charAt(i));
        }
    }
}
