using System.ComponentModel.DataAnnotations;

namespace ProjectRider.Models
{
    public class Project
    {
        [Key]
        public int Id { get; set; }

        [Required]
        [MinLength(1)]
        public string Title { get; set; }

        [Required]
        [MinLength(1)]
        public string Description { get; set; }

        [Required]
        public int Budget { get; set; }
    }
}