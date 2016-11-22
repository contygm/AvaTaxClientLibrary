using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;

namespace Avalara.AvaTax.RestClient
{
    /// <summary>
    /// Represents a license key for this account.
    /// </summary>
    public class LicenseKeyModel
    {
        /// <summary>
        /// The primary key of the account
        /// </summary>
        public Int32? accountId { get; set; }

        /// <summary>
        /// This is your private license key.  You must record this license key for safekeeping.
        ///             If you lose this key, you must contact the ResetLicenseKey API in order to request a new one.
        ///             Each account can only have one license key at a time.
        /// </summary>
        public String privateLicenseKey { get; set; }

        /// <summary>
        /// If your software allows you to specify the HTTP Authorization header directly, this is the header string you 
        ///             should use when contacting Avalara to make API calls with this license key.
        /// </summary>
        public String httpRequestHeader { get; set; }


    }
}