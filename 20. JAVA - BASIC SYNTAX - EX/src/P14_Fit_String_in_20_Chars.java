import java.util.Locale;
import java.util.Scanner;

public class P14_Fit_String_in_20_Chars {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String str = scan.nextLine();

        if (str.length() < 20) {
            str = padRight(str,20, '*');
            System.out.println(str);
        }
        else if (str.length() > 20){
            String s = str.substring(0, 20);
            System.out.println(s);
        }
        else {
            System.out.println(str);
        }
    }

    private static String padRight(String str, int len, char c) {
        String result = str;
        for (int i = 0; i < len - str.length(); i++) {
            result += c;
        }
        return result;
    }
}
