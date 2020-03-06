using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace mum5.Models
{
    public class RegistrationContext:DbContext
    {
        public RegistrationContext(DbContextOptions<RegistrationContext>options):base(options)
        {

        }
        public DbSet<Registration> Registration { get; set; }
    }
}
