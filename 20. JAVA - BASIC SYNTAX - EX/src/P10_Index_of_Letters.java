import java.util.Locale;
import java.util.Scanner;

public class P10_Index_of_Letters {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        char[] chars = scan.nextLine().toCharArray();
        for (int i = 0; i < chars.length; i++) {
            int ascii = (int) chars[i] - 97;
            System.out.printf("%s -> %d", chars[i], ascii);
            System.out.println();
        }

    }
}
