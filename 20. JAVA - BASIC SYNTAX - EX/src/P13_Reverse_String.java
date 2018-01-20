import java.util.ArrayList;
import java.util.Locale;
import java.util.Scanner;

public class P13_Reverse_String {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String str = scan.nextLine();
        String result = "";
        for (int i = str.length() - 1; i >= 0 ; i--) {
            result += str.charAt(i);
        }
        System.out.println(result);

    }
}
