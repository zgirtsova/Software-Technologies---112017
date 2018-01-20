import java.util.Locale;
import java.util.Scanner;

public class P04_Vowel_or_Digit {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String s = scan.nextLine();

        switch (s) {
            case "0":
            case "1":
            case "2":
            case "3":
            case "4":
            case "5":
            case "6":
            case "7":
            case "8":
            case "9":
                System.out.println("digit"); break;
            case "a":
            case "e":
            case "o":
            case "i":
            case "u":
                System.out.println("vowel"); break;
            default:
                System.out.println("other"); break;
        }
    }
}
