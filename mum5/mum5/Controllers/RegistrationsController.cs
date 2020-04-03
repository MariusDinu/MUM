using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using mum5.Models;

namespace mum5.Controllers
{
    public class RegistrationsController : Controller
    {
        private readonly RegistrationContext _context;

        public RegistrationsController(RegistrationContext context)
        {
            _context = context;
        }

        // GET: Registrations
        public async Task<IActionResult> SuccReg()
        {
            return View(await _context.Registration.ToListAsync());
        }

     

        // GET: Registrations/Create
        public IActionResult AddOrEdit(int id=0)
        {
            return View(new Registration());
        }

        // POST: Registrations/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> AddOrEdit([Bind("UserID,Username,Password,Email")] Registration registration)
        {
            if (ModelState.IsValid)
            {
                _context.Add(registration);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(SuccReg));
            }
            return View(registration);
        }

        // GET: Registrations/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var registration = await _context.Registration
                .FirstOrDefaultAsync(m => m.UserID == id);
            if (registration == null)
            {
                return NotFound();
            }

            return View(registration);
        }

        

        private bool RegistrationExists(string email)
        {
            return _context.Registration.Any(e => e.Email == email);
        }
    }
}
