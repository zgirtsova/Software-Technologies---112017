import java.util.Locale;
import java.util.Random;
import java.util.Scanner;

public class P21_Advertisement_Message {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);

        String[] phrases = {"Excellent product.", "Such a great product.",
                "I always use that product.", "Best product of its category.",
                "Exceptional product.", "I can't live without this product."};
        String[] events = {"Now I feel good.", "I have succeeded with this product.",
                "Makes miracles. I am happy of the results!",
                "I cannot believe but now I feel awesome.", "Try it yourself, I am very satisfied.",
                "I feel great!"};
        String[] author = {"Diana", "Petya", "Stella", "Elena", "Katya", "Iva", "Annie", "Eva"};
        String[] cities = {"Burgas", "Sofia", "Plovdiv", "Varna", "Ruse"};


        Random rand = new Random();
        int n = Integer.parseInt(scan.nextLine());

        for (int j = 0; j < n; j++) {
            int ph = rand.nextInt(phrases.length);
            int ev = rand.nextInt(events.length);
            int au = rand.nextInt(author.length);
            int ci = rand.nextInt(cities.length);

            System.out.printf("%s %s %s - %s", phrases[ph], events[ev], author[au], cities[ci]);
            System.out.println();
        }


    }
}
