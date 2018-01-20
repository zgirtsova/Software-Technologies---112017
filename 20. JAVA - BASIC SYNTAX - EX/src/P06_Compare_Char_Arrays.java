import java.util.ArrayList;
import java.util.Locale;
import java.util.Scanner;

public class P06_Compare_Char_Arrays {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        String[] strOne = scan.nextLine().split(" ");
        String[] strTwo = scan.nextLine().split(" ");
        String w = String.join("",strOne);
        String w2 = String.join("",strTwo);

        int comparator = w.compareTo(w2);

        if (comparator <= 0) {
            System.out.println(w);
            System.out.println(w2);
        }
        else {
            System.out.println(w2);
            System.out.println(w);
        }
    }
}
