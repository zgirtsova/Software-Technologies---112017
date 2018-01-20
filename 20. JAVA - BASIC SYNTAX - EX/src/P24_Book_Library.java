import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.*;
import java.util.stream.Collectors;
import java.util.stream.Stream;

public class P24_Book_Library {

    public static class Book {
        String title;
        String author;
        String publisher;
        LocalDate releaseDate;
        String barcode;
        double price;

        public String getTitle() {
            return title;
        }
        public void setTitle(String title) {
            this.title = title;
        }

        public String getAuthor() {
            return author;
        }
        public void setAuthor(String author) {
            this.author = author;
        }

        public String getPublisher() {
            return publisher;
        }
        public void setPublisher(String publisher) {
            this.publisher = publisher;
        }

        public LocalDate getReleaseDate() {
            return releaseDate;
        }
        public void setReleaseDate(LocalDate releaseDate) {
            this.releaseDate = releaseDate;
        }

        public String getBarcode() {
            return barcode;
        }
        public void setBarcode(String barcode) {
            this.barcode = barcode;
        }

        public double getPrice() {
            return price;
        }
        public void setPrice(double price) {
            this.price = price;
        }
    }
    public static class Library {
        public String name;
        public List<Book> bookList;

        public String getName() {
            return name;
        }
        public void setName(String name) {
            this.name = name;
        }

        public List<Book> getBookList() {
            return bookList;
        }
        public void setBookList(List<Book> bookList) {
            this.bookList = bookList;
        }
    }
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);

        // calls method for reading libraries
        Library lib = readLibrary();

        // groups books in a map by their author and sums all prices
        Map<String, Double> result = lib
                .bookList.stream()
                .collect(Collectors.groupingBy(Book::getAuthor,
                         Collectors.summingDouble(Book::getPrice)));

        //calls method {sortHash} which sorts the map descending by price
        //then ascending by author's name
        Map<String, Double> sorted = sortHash(result);

        //prints the Map.Entry
        for (String name:sorted.keySet()) {
            System.out.printf("%s -> %.2f%n",name, sorted.get(name));
        }
    }
    private static Map<String, Double> sortHash(Map<String, Double> map) {
        List<Map.Entry<String, Double>> list = new ArrayList<>(map.entrySet());

        // Sort list by integer values then by string keys
        Collections.sort(list, (a, b) -> {
            int cmp1 = b.getValue().compareTo(a.getValue());
            if (cmp1 != 0)
                return cmp1;
            else
                return a.getKey().compareTo(b.getKey());
        });

        Map<String, Double> result = new LinkedHashMap<>();
        for (Map.Entry<String, Double> entry : list)
            result.put(entry.getKey(), entry.getValue());

        return result;
    }

    private static Library readLibrary() {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        List<Book> list = new ArrayList<>();

        int n = Integer.parseInt(scan.nextLine());
        for (int i = 0; i < n; i++) {
            Book b = readBook(scan.nextLine());
            list.add(b);
        }
        Library lib = new Library() {
            {
                name = "Library";
                bookList = list;
            }
        };

        return lib;
    }

    private static Book readBook(String s) {
        List<String> input = Arrays.stream(s.split(" "))
                .collect(Collectors.toList());
        DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        Book b = new Book() {
        {
            title = input.get(0);
            author = input.get(1);
            publisher = input.get(2);
            releaseDate = LocalDate.parse(input.get(3), formatter);
            barcode = input.get(4);
            price = Double.parseDouble(input.get(5));
        }
        };

        return b;
    }
}
