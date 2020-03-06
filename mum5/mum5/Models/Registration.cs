using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Threading.Tasks;

namespace mum5.Models
{   
    public class Registration
    {
        [Key]
        public int UserID { get; set; }
        [Column(TypeName ="varchar(30)")]
        public string Email { get; set; }
        [Column(TypeName = "varchar(20)")]
        [Required]
      public string Username { get; set; }
        [Column(TypeName = "varchar(15)")]
        [Required]
        public string Password { get; set; }
        
    }
}
