import java.util.Locale;
import java.util.Scanner;

public class P05_Integer_to_Hex_Binary {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int n = Integer.parseInt(scan.nextLine());
        String bin = Integer.toBinaryString(n).toUpperCase();
        String hex = Integer.toHexString(n).toUpperCase();

        System.out.println(hex);
        System.out.println(bin);
    }
}
